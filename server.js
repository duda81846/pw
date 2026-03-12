//método de importação com CommonJS:
//const express = require("express");

import express from 'express';

const app = express();

app.get("/", (request, response) => {
    response.send("Olá, mundo!");
});

app.get("/usuario", (request, response) => {
    response.send("Duda");
});

app.listen(8000, (request, response) => {
    console.log("Servidor rodando no endereço: http://127.0.0.1:8000")
});