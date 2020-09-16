var http = require('http')
var fs = require('fs')

var server = http.createServer()
server.on('request',(request, response) => {
	if(request.url === "/")
	{
		fs.readFile('list-users.html', (err,data) =>{
			if (err) {
				response.writeHead(404)
				response.end("Ce fichier n'existe pas!!")
			}
			else{
				response.writeHead(200, {
					'content-type': 'text/html; charset=utf-8'
				})
			response.end(data)
			}	
		})
    }
    else if(request.url === "/listusers")
	{
		fs.readFile('list-users.html', (err,data) =>{
			if (err) {
				response.writeHead(404)
				response.end("Ce fichier n'existe pas!!")
			}
			else{
				response.writeHead(200, {
					'content-type': 'text/html; charset=utf-8'
				})
			response.end(data)
			}	
		})
    }
    else if(request.url === "/adduser")
	{
		fs.readFile('add-user.html', (err,data) =>{
			if (err) {
				response.writeHead(404)
				response.end("Ce fichier n'existe pas!!")
			}
			else{
				response.writeHead(200, {
					'content-type': 'text/html; charset=utf-8'
				})
			response.end(data)
			}	
		})
    }
    else 
	{
		fs.readFile('404.html', (err,data) =>{
		
				response.writeHead(200, {
					'content-type': 'text/html; charset=utf-8'
				})
			response.end(data)
				
		})
    }
})

server.listen(3000)