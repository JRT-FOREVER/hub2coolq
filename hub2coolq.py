#!/usr/bin/env python3
#-*- coding: utf-8 -*-
from flask import Flask, request, jsonify
from cqhttp import CQHttp

import config

bot = CQHttp(config.api_root, config.access_token, config.secret)

app = Flask(__name__)

@app.route('/github', methods=['POST', 'GET'])
def github():
    return jsonify(bot.send_group_msg(group_id=config.group_id, message=config.msg_prefix+request.json["sender"]["login"]))

