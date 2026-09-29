<form action="calcular.php" method="POST">

    <label>Primeiro número:</label>
    <input type="number" name="numero1" step="any" required>

    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="numero2" step="any" required>

    <br><br>

    <label>Operação:</label>

    <select name="operacao" required>
        <option value="+">Somar (+)</option>
        <option value="-">Subtrair (-)</option>
        <option value="*">Multiplicar (*)</option>
        <option value="/">Dividir (/)</option>
    </select>

    <br><br>

    <button type="submit">Calcular</button>

</form>