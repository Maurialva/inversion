<table cellpadding="5" cellspacing="0" border="1">
<tr>
    <th bgcolor="blue">
        Nombre:
    </th>
    <td>
        <?php echo $nombre; ?>
    </td>
</tr>
<tr>
    <th bgcolor="blue">
        Email:
    </th>
    <td>
        <?php echo $email; ?>;
    </td>
</tr>
<tr>
    <th bgcolor="blue">
        Asunto:
    </th>
    <td>
        <?php echo $asunto; ?>;
    </td>
</tr>
<tr>
    <th bgcolor="blue">
        Mensaje:
    </th>
    <td>
        <?php echo nl2br($mensaje); ?>;
    </td>
</tr>

</table>