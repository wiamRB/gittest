# gittest
from socket import *
serverPort = 12000
serverSocket = socket(AF_INET, SOCK_DGRAM)
serverSocket.bind((”, serverPort))
print ‘The Server is ready to receive requests from Clients’
while True:
messagefromclient, clientAddress = serverSocket.recvfrom(2048)
print ‘Message from Client: ‘, messagefromclient
messagetoclient = raw_input(‘Enter Reply Message to Client: ‘)
serverSocket.sendto(messagetoclient, clientAddress)
