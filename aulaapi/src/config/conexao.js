const mysql = require('mysql');
const environment = "development";
const config = require("../config/config.js")[environment];

const con = mysql.createConnection({
    host: config.database.host, // O host do banco. Ex: localhost    
    user: config.database.user, // Um usuário do banco. Ex: user 
    password: config.database.password, // A senha do usuário. Ex: user123
    database: config.database.database // A base de dados a qual a aplicação irá se conectar, deve ser a mesma onde foi executado o Código 1. Ex: node_mysql
});

con.connect((err) => {
    if (err) {
        console.log('Erro ao conectar...', err)
        return
    }
    console.log('Conexao Realizada!')
})

//  ################################    CRIA A VARIAVEL QUE VAI SER USADA PARA INSERIR   ################################
/*
const agendamento = {nome:'Ace Giiu', email: 'acegiiu@ig.com.br', ativo:0 }
*/
//  ################################    QUERY DE EXIBIR   ################################
/*
con.query('INSERT INTO agendamento SET ? ', agendamento, (err,rows) => {
    if(err) throw err
    console.log("Registro salvo com sucesso");
})
*/
//  ################################    QUERY DE CONSULTAR E EXIBIR   ################################
/*
con.query('select * from agendamento', (err,rows) => {
    if(err) throw err
    console.log('Agendamentos', rows, '\n\n')
})
*/
//  ################################    QUERY DE FAZER UPDATE   ################################
/*
con.query('UPDATE agendamento SET nome = ?, email = ? where ID = ? ', ['ALTERADO','Editado@edit','1'], (err,rows) => {
    if(err) throw err
    console.log("Registro Atualizado com sucesso");
})
*/
//  ################################    QUERY DE DELETAR   ################################
/*
con.query('DELETE FROM agendamento where ID = ? ', ['1'], (err,resultado) => {
    if(err) throw err
    console.log(`Foram excluida(s) ${resultado.affectedRows} linha(s)`);

})
*/
//  ################################    QUERY DE CONSULTAR E EXIBIR TODOS EM FORMATO BONITINHO   ################################
/*
con.query('select * from agendamento', (err,rows) => {
    if(err) throw err

    rows.forEach(row => {
        console.log(`${row.nome} - ${row.email}`);
    })
})
*/
//  ################################    MESMAS COISAS DE ANTES, PARA OUTRA TABELA DENTRO DO BD   ################################

const produto = {nome:'TerceiroProduto', preco: '1000', ativo:0 }
/*
con.query('INSERT INTO produto SET ? ', produto, (err,rows) => {
    if(err) throw err
    console.log("Registro salvo com sucesso");
})
*/
/*
con.query('UPDATE produto SET nome = ?, preco = ? where ID = ? ', ['SegundoProduto','1500,00','2'], (err,rows) => {
    if(err) throw err
    console.log("Registro Atualizado com sucesso");
})*/

con.query('DELETE FROM produto where ID = ? ', ['3'], (err,resultado) => {
    if(err) throw err
    console.log(`Foram excluida(s) ${resultado.affectedRows} linha(s)`);

})

con.query('select * from produto', (err,rows) => {
    if(err) throw err
    console.log('Produtos', rows, '\n\n')
})



con.end((err) => {
    if(err) {
        console.log('Erro ao finalizar conexão...', err)
        return 
    }
    console.log('Conexão encerrada...')
})