var express = require('express');
var router = express.Router();

router.get('/', function(req, res, next) {
    resp.send('Endpoint para Listar ');
  });

router.post('/POST', function(req, resp, next) {
    resp.send("Endpoint para Cadastrar");
});

router.delete('/DEL', function(req, resp, next) {
    resp.send("Endpoint para deletar");
});

router.put('/PUT', function(req, resp, next) {
    resp.send("Endpoint para atualizar");
});

module.exports = router;