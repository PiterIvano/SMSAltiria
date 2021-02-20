import clx.xms
import requests
print("-----------------------------")
print("     Creado por Piter        ")
print("-----------------------------")

en = input("escriba su numero con la entrada de pais sin el + ->")
print("----------------------------------------------------------")
te = input("Escriba el texto a enviar ->")
print("----------------------------------------------------------")
client = clx.xms.Client(service_plan_id='e70ea21757e54968a068db47f7ef1244', token='326cee2e85a449169022c2a541097ec0')

create = clx.xms.api.MtBatchTextSmsCreate()
create.sender = '447537404817'
create.recipients = {en}
create.body = te

try:
  batch = client.create_batch(create)
except (requests.exceptions.RequestException,
  clx.xms.exceptions.ApiException) as ex:
  print('Failed to communicate with XMS: %s' % str(ex))

print ("Su sms se a enviado")
