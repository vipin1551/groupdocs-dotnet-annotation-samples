from flask import Flask, url_for, Markup
import urllib2
from flask import render_template
from flask import request
app = Flask(__name__)

@app.route('/')
def index(error=None):
    return render_template('index.html', error = error)

@app.route('/sample/', methods=['GET', 'POST'])
def sample(path=None, error=None, handler=None):
    import pdb
    path = Markup(request.form["path"]).striptags()
    if "handler" in request.form:
        handler = "Handler"
    else:
        handler = ""
    if path == '':
        error = 'Please enter server path were you have installed GroupDocs Java Viewer'
        return render_template('index.html', error = error)
    return render_template('sample.html', path = path, handler = handler)

with app.test_request_context():
    print url_for('index', error = '')
    print url_for('static', filename='style.css')

if __name__ == '__main__':
    app.run(debug=True)