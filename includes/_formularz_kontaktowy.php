<style>
    p {
        margin-top: 3px;
    }
    label
    {
        width: 6em;
        float: left;
        text-align: right;
        margin-right: 0.5em;
        display: block
    }

    .submit input
    {
        margin-left: 4.5em;
        width: 1em;
    } 

    input
    {
        color: #781351;
        background: #fee3ad;
        border: 1px solid #781351;
        width: 60%;

    }

    textarea
    {
        color: #781351;
        background: #fee3ad;
        border: 1px solid #781351;
        width: 60%;
    }

    .submit input
    {
        color: #000;
        background: #ffa20f;
        border: 2px outset #d7b9c9
    } 
    .reset input
    {
        color: #000;
        background: #ffa20f;
        border: 2px outset #d7b9c9
    } 
    fieldset
    {
        border: 1px solid #781351;
        width: 20em
    }

    legend
    {
        color: #fff;
        background: #ffa20c;
        border: 1px solid #781351;
        padding: 2px 6px;
        margin-left: 15px;
    }
</style>

<form method="post" action="podstrony/_wyslij.php">
<fieldset>
    <legend>Wyślij zapytanie</legend>
    <p>
        <label for="name">Podpis</label>
        <input name="name" type="text" id="name" />
    </p>

    <p>
        <label for="customer_mail">Email</label>
        <input name="customer_mail" type="text" id="customer_mail" />
    </p>
    <p>
        <label for="subject">Temat</label>
        <input name="subject" type="text" id="subject" />
    </p>
    <p>
        <label for="detail">Wiadomość</label>
        <textarea name="detail" rows="4" id="detail"></textarea>
    </p>
    <p>    
        <input type="submit" id="form_submit" name="submit" value="prześlij"> 
        <input type="reset" id="form_reset" name="reset" value="wyczyść">
    </p>

</fieldset>
</form>
