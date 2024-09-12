<form method="POST" action="/add-user-grade">
    @csrf
    <input type="text"   name="profesor" placeholder="Unesi ime profesora">
    <input type="text"   name="predmet"  placeholder="Unesi ime predmeta">
    <input type="number" name="ocena"    placeholder="Unesi ocenu">
    <button type="submit">Sacuvaj ocenu</button>
</form>
