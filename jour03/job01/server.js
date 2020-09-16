var http = require('http')

var server = http.createServer()
server.on('request',(request, response) => {
	response.writeHead(200)
	response.end('Hello World')
})

server.listen(3000)