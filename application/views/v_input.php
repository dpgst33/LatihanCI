<html>
    <head>
         <title>Form Toko Sepatu</title>
    </head>
<body>
    <center>
        <form action="<?= base_url('TokoSepatu/cetak'); ?>"method="post">
            <table><tr>
            <th colspan="3"> Toko Sepatu</th></tr>
            <tr>
                <td colspan="3">
            <hr></td>
            </tr>
            <tr>
                <td>Nama Pembeli</td><td>:</td>
            <td>
                <input type="text" name="Nama" id="Nama" placeholder=" Nama Harus Diisi"></td>
            </tr>
            <tr>
                <td>No Hp</td></th><td>:</td>
            <td>
                <input type="text" name="No" id="No" placeholder=" No. Hp Harus Diisi"></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td><td>:</td>
            <td>
                <select name="Merk" id="Merk">
                    <option value="">Pilih Merk</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Kickers">Kickers</option>
                    <option value="Eiger">Eiger</option>
                    <option value="Bucherri">Bucherri</option>
                </select>
            </td>
            <tr>
                <td>Ukuran Sepatu</td><td>:</td>
            <td>
                <select name="Size" id="Size">
                    <option value="">Pilih Ukuran</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
            </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                <input type="submit" value="Submit"></td>
            </tr>
            </table>
    </form>
    </center>
</body>
</html