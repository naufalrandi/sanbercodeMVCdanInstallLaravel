<!DOCTYPE html>
<html>
<head>
    <title>Contoh form pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h4>Sign Up Form</h4>
        <form action="{{ route('welcome') }}" method="POST">
            @csrf
            <label for="FN">Fisrt Name</label><br>
            <input type="text" id="FN" name="fn">
            <br>
            <label for="LN"> Last Name</label><br>
            <input type="text" id="LN" name="ln">

        <p>
            <label>Gender:</label><br>
            <label><input type="radio" name="Gender" value="Male" /> Male</label><br>
            <label><input type="radio" name="Gender" value="Female" /> Female</label><br>
            <label><input type="radio" name="Gender" value="Other" /> Other</label>
        </p>

         <p>
            <label>Naionality:</label><br><br>
            <select name="Nasionality">
                <option value="Indonesia">Indonesia</option>
                <option value="Inggris">Inggris</option>
                <option value="Japan">Japan</option>
                <option value="Australia">Australia</option>
                <option value="Singapura">Singapura</option>
                <option value="Malaysia">Malaysia</option>
            </select>
        </p>

        <p>
            <label> Language Spoken:</label><br><br>
            <label><input type="checkbox" name="Language_Spoken" value="Bahasa Indonesia" /> Bahasa Indonesia </label><br>
            <label><input type="checkbox" name="Language_Spoken" value="English" /> English </label><br>
            <label><input type="checkbox" name="Language_Spoken" value="Other" /> Other </label>
        </p>

        <p>
            <label> Bio:</label><br>
            <textarea placeholder="isilah biografi singkat anda" cols="30" rows="5"></textarea>
        </p>
        <p>
        <button type="submit">Sign Up</button>

        </p>
    </form>

    </table>
</body>
</html>
