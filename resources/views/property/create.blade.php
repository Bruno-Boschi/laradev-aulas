<h1>Formulario de Cadastro :: imoveis</h1>
<form action="/imoveis/cadastrar" method="post">
    {{ csrf_field() }}
    <label for="title">Titulo do imovel</label>
    <input type="text" name="title" id="title">
    <br />

    <label for="description">Descrição</label>
    <textarea type="text" name="description" id="description"></textarea>
    <br />

    <label for="rental_price">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price">
    <br />

    <label for="sale_price">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price">
    <br />

    <button type="submit">Cadastrar Imóvel</button>
</form>
