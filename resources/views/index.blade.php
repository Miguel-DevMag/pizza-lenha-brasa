<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Pizza Lenha & Brasa</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial;
}

body {
  background: #ff2b2b;
  display: flex;
  height: 100vh;
}

/* layout */
.left {
  width: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.left img {
  width: 300px;
}

.right {
  width: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* caixa */
.box {
  background: #ddd;
  padding: 30px;
  border-radius: 15px;
  width: 350px;
}

/* esconder telas */
.screen {
  display: none;
}

.active {
  display: block;
}

h1 {
  color: white;
  text-align: center;
  position: absolute;
  top: 40px;
  right: 100px;
}

h3 {
  margin-bottom: 10px;
}

input {
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border-radius: 8px;
  border: none;
  background: #ccc;
}

button {
  width: 100%;
  padding: 12px;
  background: red;
  color: white;
  border: none;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
}

a {
  font-size: 12px;
  display: block;
  text-align: center;
  margin-top: 10px;
  cursor: pointer;
}

.code {
  display: flex;
  gap: 10px;
  justify-content: center;
}

.code input {
  width: 50px;
  text-align: center;
  font-size: 20px;
}

ul {
  font-size: 12px;
  margin: 10px 0;
}
</style>
</head>

<body>

<div class="left">
  <img src="logo.png">
</div>

<div class="right">
  <div class="box">

    <div id="cadastro" class="screen active">
      <h3>Nome completo</h3>
      <input type="text">

      <h3>E-mail</h3>
      <input type="email">

      <h3>Senha</h3>
      <input type="password">

      <button>Cadastrar</button>

      <a onclick="trocar('login')">Já é usuário? Entrar</a>
    </div>

    <div id="login" class="screen">
      <h3>E-mail</h3>
      <input type="email">

      <h3>Senha</h3>
      <input type="password">

      <button>Login</button>

      <a onclick="trocar('recuperar')">Esqueci minha senha</a>
    </div>

    <div id="recuperar" class="screen">
      <h3>Digite seu email ou número</h3>
      <input type="text" placeholder="Email/Número">

      <button onclick="trocar('codigo')">Redefinir</button>
    </div>

    <div id="codigo" class="screen">
      <h3>Código de verificação</h3>

      <div class="code">
        <input maxlength="1">
        <input maxlength="1">
        <input maxlength="1">
        <input maxlength="1">
      </div>

      <br>
      <button onclick="trocar('novaSenha')">Verificar</button>
    </div>

    <div id="novaSenha" class="screen">
      <h3>Nova senha</h3>
      <input type="password" id="senha1">

      <h3>Confirmar senha</h3>
      <input type="password" id="senha2">

      <ul>
        <li>Letras e números</li>
        <li>Maiúsculas e minúsculas</li>
        <li>Caractere especial (# ! @)</li>
      </ul>

      <button onclick="validarSenha()">Redefinir</button>
    </div>

  </div>
</div>

<script>
function trocar(tela) {
  document.querySelectorAll('.screen').forEach(s => {
    s.classList.remove('active');
  });
  document.getElementById(tela).classList.add('active');
}

function validarSenha() {
  let s1 = document.getElementById('senha1').value;
  let s2 = document.getElementById('senha2').value;

  if (s1 !== s2) {
    alert("As senhas não coincidem!");
    return;
  }

  if (s1.length < 6) {
    alert("Senha muito curta!");
    return;
  }

  alert("Senha redefinida com sucesso!");
  trocar('login');
}
</script>

</body>
</html>