module.exports = app => {



  app.get('/prova', (req, res) =>

    res.send('Verbo GET no endpoint Prova')

  )



  app.post('/prova', (req, res) => 

    res.send('Verbo POST no endpoint Prova')

  )

  

  app.put('/prova', (req, res) => 

    res.send('Verbo PUT no endpoint Prova')

  )  



  app.delete('/prova', (req, res) => 

    res.send('Verbo DELETE no endpoint Prova')

  )



}