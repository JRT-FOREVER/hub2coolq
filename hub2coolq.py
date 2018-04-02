#!/usr/bin/env python3
#-*- coding: utf-8 -*-
from flask import Flask, request, jsonify
from cqhttp import CQHttp

import config

bot = CQHttp(config.api_root, config.access_token, config.secret)

app = Flask(__name__)

@app.route('/github', methods=['POST', 'GET'])
def github():
    msg = config.msg_prefix + request.headers['X-GitHub-Event'] + ' by ' +  request.json["sender"]["login"]
    #return jsonify(msg)
    return jsonify(bot.send_group_msg(group_id=config.group_id, message=msg))
