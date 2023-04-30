var http = require('http');
var fs = require('fs');
http.createServer(function(req, res) {
    fs.readFile('index.html', 'style.css', 'donate.html', 'call.html', 'register.html', function(err, data) {
        if (err) throw err; {
            res.writeHead(404, { 'Content-type': 'text/html' });
            return res.end("404 Not Found");
        };
        res.writeHead(200, { 'Content-type': 'text/html' });
        res.write(data);
        return res.end();
    });
}).listen(8085);