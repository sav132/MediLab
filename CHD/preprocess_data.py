

def preprocess_data() :

	vector = list()
	
	#Annual Per-capita Income
	if (data["Annual PCI"] < 1000):
		vector.append(1)
	elif (data["Annual PCI"] >= 1000) and (data["Annual PCI"] < 2000):
		vector.append(2)
	elif (data["Annual PCI"] >= 2000) and (data["Annual PCI"] < 4000):
		vector.append(3)
	elif (data["Annual PCI"] >= 4000) and (data["Annual PCI"] < 8000):
		vector.append(4)
	elif (data["Annual PCI"] >= 8000):
		vector.append(5)

	#Maternal delivery age
	if (data["delivery_age"] >= 30):
		vector.append(1)
	else:
		vector.append(0)