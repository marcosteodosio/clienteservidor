const express = require('express')
const app = express();
const port = 3000;


app.get('/aula', (req, resp) => {
    resp.send("Primeiro Endpoint, aula 01 ")
})

app.get('/teste', (req, resp) => {
    resp.send("Segundo Endpoint, aula 01, feito na aula seguinte como prática ")
})

app.post('/spi', (req, resp) => {
    resp.send("Aula SPI, aula 01 - service 2 ")
})

app.listen(port, () => { console.log('Aplicação com express porta ' + port) })