import clx.xms
import requests
print("------------------------------------------------")
print("-----------------Creado por Piter---------------")
print("------------------------------------------------")
print("------------------------------------------------")
print("---------------Sk es puto-----------------------")
print("------------------------------------------------")


en = input("escriba su numero con la entrada de pais sin el + -> ")
print("----------------------------------------------------------")
te = input("Escriba el texto a enviar -> ")
print("----------------------------------------------------------")
client = clx.xms.Client(service_plan_id='a60883dd6bdb49769705c63087633849', token='5702bea1c99c4dd29e7b46a9a9892ea4')


create = clx.xms.api.MtBatchTextSmsCreate()
create.sender = '447537404817'
create.recipients = {en}
create.body = te

try:
  batch = client.create_batch(create)
  print ("Su sms se a enviado")
  print("----------------------------------------------------------")
  print("----------------Chicos este es mi ultimo escript----------")
except (requests.exceptions.RequestException,
  clx.xms.exceptions.ApiException) as ex:
  print("Error de envio por favor intente mas tarde)


