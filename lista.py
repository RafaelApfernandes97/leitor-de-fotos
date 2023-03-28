import os

def listar_imagens(pasta):
    imagens = []
    for nome_arquivo in os.listdir(pasta):
        if nome_arquivo.endswith(('.jpeg', '.jpg', '.png', '.gif')):
            caminho_completo = os.path.join(pasta, nome_arquivo)
            imagens.append({'nome': nome_arquivo, 'caminho': caminho_completo})
    
    return imagens

from flask import Flask, jsonify

app = Flask(__name__)

@app.route("/imagens")
def get_imagens():
    imagens = listar_imagens('/imagens')
    return jsonify(imagens)

    