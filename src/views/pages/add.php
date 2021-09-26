<?php $render('header');?>

<h2>Adicionar Novo Usuário</h2>
<form action="<?=$base;?>/novo" method="POST">
<label>
Nome:
<input type="text" name="nome">
</label>
<label>
    <br/><br/>
Email:
<input type="email" name="email">
</label>
<br/><br/>
<input type="submit" value="Adicionar">

</form>

<?php $render('footer');?>