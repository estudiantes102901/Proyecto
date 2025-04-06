from flask import Flask, render_template, request, redirect, url_for, flash, session
app = Flask(__name__)



# Panel de administración

@app.route('/')
def admin_dashboard():
    return render_template('home.html')

# Autenticación
@app.route('/login', methods=['GET', 'POST'])
def login():
    return render_template('login.html')

#transacciones reportes

@app.route('/transactions', methods=['GET', 'POST'])
def user_transactions():
    return render_template('transacciones.html')

@app.route('/reports')
def user_reports():
        return render_template('reporte.html')

app.run()