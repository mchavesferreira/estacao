from bs4 import BeautifulSoup
import requests
import pandas as pd
from datetime import date, datetime
import mysql.connector

con = mysql.connector.connect(host='localhost',database='sensor',user='root',password='S&nh@123')

idparametro = [ 12, 17, 15, 18, 63, 23, 21, 29, 26, 56, 28, 25, 24 ]
nomeparametro = [ 'MP10', 'NO', 'NO2', 'NOx', 'O3', 'DV', 'DVG', 'PRESS', 'RADG', 'RADUV', 'UR', 'TEMP', 'VV' ]
horarios = [ '00:00:00','01:00:00','02:00:00','03:00:00','04:00:00','05:00:00','06:00:00','07:00','08:00','09:00','10:00', '11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00' ]

print('verificando datas inseridas')
data_atual = date.today()  #************
#data_atual='2021-09-15'  #  ******
hoje=str(data_atual)+' '+'01:00:00'
#hoje='2021-09-14 '+'01:00:00'
print(hoje)
cursor = con.cursor()
cursor.execute("SELECT MP10 from `cetesbcatanduvamedhor`  where time = %s ", (hoje,))
result = cursor.fetchall()
w=len(result)

print("inserindo horas")
if w == 0:
     zl = range(0, 24)
     for mm in zl:
          shoje=str(data_atual)+' '+horarios[mm]
          #print(shoje)
          #gravar = (shoje, 1)
          cursor.execute("INSERT INTO `cetesbcatanduvamedhor` (time, registro) VALUES (%s, %s) ", (shoje,'1'))
 

# Start the session
session = requests.Session()

# Create the payload
payload = {'cetesb_login':'mchavesferreira@gmail.com', 
          'cetesb_password':'#ifsp1a2b3c',
            'enviar':'OK',
           'cookie' : 'cookie'
         }

# Post the payload to the site to log in
s = session.post("https://qualar.cetesb.sp.gov.br/qualar/autenticador", data=payload)

soup = BeautifulSoup(s.text, 'html.parser')

#import requests

session.cookies
print(data_atual)

# Navigate to the next page and scrape the data
#s = session.get('https://qualar.cetesb.sp.gov.br/qualar/exportaDados.do?method=pesquisarInit')

#soup = BeautifulSoup(s.text, 'html.parser')

localizar=datetime.today().strftime('%d/%m/%Y')
#localizar = '26/09/2021'


z = range(0, 13)
for m in z:
    payload2 = {'cetesb_login':'mchavesferreira@gmail.com', 
               'cetesb_password':'#ifsp1a2b3c',
               'enviar':'OK',
               'cookie' : 'cookie',
               'irede': 'A',
               'dataInicialStr': localizar,
               'dataFinalStr': localizar,
               'cDadosInvalidos' : 'on',
               'iTipoDado': 'P',
               'estacaoVO.nestcaMonto': '248',
               'parametroVO.nparmt': idparametro[m],
               'method' : 'pesquisar'
               }
    nomeparemetromysql=nomeparametro[m]             

    print ("sigla parametro")
    print ( nomeparemetromysql)

    orderparametro=m
    s = session.post("https://qualar.cetesb.sp.gov.br/qualar/exportaDados.do", data=payload2)

    soup = BeautifulSoup(s.text, 'html.parser')
    table = soup.find(name='table')
    table = soup.find(name='table', attrs={'id':'tbl'})


    data = []
    i=0
    rows = table.find_all('tr')
    for row in rows:
        i=i+1
        cols = row.find_all('td')
        cols = [ele.text.strip() for ele in cols]
        data.append([ele for ele in cols if ele]) # Get rid of empty values
    x=len(data)

    i = range(2, x)
    for n in i:
        atual=data[n][3]+' '+data[n][4]
        nomecelula=data[n][7]
        parametroleitura=data[n][9]
        #print (atual)
        if data[n][4]=='24:00':
            #hora[i]='00:00'
            #print(diahora.day)
            atual=data[n][3]+' '+'00:00'
            diahora = datetime.strptime(atual, '%d/%m/%Y %H:%M')
            proximodia=str(diahora.day+1)
            #proximodia = str(proximodia)
            #print (proximodia)
            proximomes=str(diahora.month)
            proximoano=str(diahora.year)
            data[n][3]=proximodia+'/'+proximomes+'/'+proximoano
            atual=data[n][3]+' '+'00:00'
        diahora = datetime.strptime(atual, '%d/%m/%Y %H:%M')
        dataFormatada = diahora.strftime('%Y-%m-%d %H:%M:00')
        
        novoNumero = parametroleitura.replace(",",".")
        

        #print(nomeparemetromysql, novoNumero , dataFormatada)  
        #mySql_insert_query = """UPDATE cetesbcatanduvamedhor SET %s = %s WHERE time = %s  """
        cursor = con.cursor()
        if orderparametro==0:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET MP10  = %s WHERE time = %s  """  
        if orderparametro==1:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET NO  = %s WHERE time = %s  """  
        if orderparametro==2:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET NO2  = %s WHERE time = %s  """  
        if orderparametro==3:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET NOx  = %s WHERE time = %s  """  
        if orderparametro==4:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET O3  = %s WHERE time = %s  """  
        if orderparametro==5:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET DV  = %s WHERE time = %s  """  
        if orderparametro==6:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET DVG  = %s WHERE time = %s  """  
        if orderparametro==7:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET PRESS  = %s WHERE time = %s  """  
        if orderparametro==8:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET RADG  = %s WHERE time = %s  """  
        if orderparametro==9:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET RADUV  = %s WHERE time = %s  """  
        if orderparametro==10:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET UR  = %s WHERE time = %s  """  
        if orderparametro==11:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET TEMP  = %s WHERE time = %s  """  
        if orderparametro==12:
            mySql_insert_query = """UPDATE `cetesbcatanduvamedhor` SET VV  = %s WHERE time = %s  """  


#nomeparametro = [ 'MP10', 'NO', 'NO2', 'NOx', 'O3', 'DV', 'DVG', 'PRESS', 'RADG', 'RADUV', 'UR', 'TEMP', 'VV' ]
        
        record = (novoNumero, dataFormatada)
        cursor.execute(mySql_insert_query, record)
        con.commit()
        cursor.close()
con.close()        


        
#crontab -e
#20 22 3 * * – no terceiro dia de cada mês às 22:20
#*/30 * * * * – a cada 30 minutos        
#0 8 * * 1,2,3,4,5 de segunda a sexta às 08:00
# min (0 - 59)
# hora (0 - 23)
# dia do mês (1 - 31)
# mês (1 - 12)
# dia da semana (0 - 6) (0 a 6 representa
#de domingo a sábado, ou use nomes;
#7 também representa domingo)

#0 1 * * * /usr/local/cpanel/scripts/cpbackup
#5 * * * * root python3 /home/cetesblote.py