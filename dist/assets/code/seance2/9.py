class Chat :
	def __init__(self, miaulement):
		print("Chat créé")
		self.miaulement = miaulement

	def Miauler(self):
		print(self.miaulement)

	def MiaulerPleinDeFois(self, nombre):
		for compteur in range(nombre):
			self.Miauler()

chat = Chat("Miaou")


chat.MiaulerPleinDeFois(10)
