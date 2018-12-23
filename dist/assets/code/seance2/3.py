class Chat :
	def __init__(self, miaulement):
		print("Chat créé")
		self.miaulement = miaulement

	def Miauler(self):
		print(self.miaulement)

chatNoir = Chat("Miaou")
chatBlanc = Chat("Meow")

chatNoir.Miauler()
chatBlanc.Miauler()
