class Chat :
	def __init__(self, miaulement):
		print("Chat créé")
		self.miaulement = miaulement

	def Miauler(self):
		print(self.miaulement)

	def MiaulerPleinDeFois(self, nombre):
		for compteur in range(nombre):
			self.Miauler()

class Maitre:
	def __init__(self, chat):
		self.chat = chat

	def NourrirChat(self):
		print("Tiens minou")
		self.chat.MiaulerPleinDeFois(5)

chat = Chat("Miaou")
maitre = Maitre(chat)

maitre.NourrirChat()
