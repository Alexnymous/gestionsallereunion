<form method="post" action="#">
    <div>
        <label for="salle">Salle : </label>
        <select name="room" id="salle" size="1">
            <option value=""></option>
            <option value="Gilbert Montagné">Gilbert Montagné</option>
            <option value="Claude François">Claude François</option>
            <option value="Patrick Sébastien">Patrick Sébastien</option>
            <option value="Jul">Jul</option>
        </select>
    </div>
    <div>
        <label for="date">Date : </label>
        <input id="date" type="date" name="date"/>
    </div>

    <div>
        <label for="start">Horaire de début : </label>
        <select name="start" id="start" size="1">
            <option value="8">8:00</option>
            <option value="9">9:00</option>
            <option value="10">10:00</option>
            <option value="11">11:00</option>
            <option value="12">12:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15">15:00</option>
            <option value="16">16:00</option>
            <option value="17">17:00</option>
            <option value="18">18:00</option>
            <option value="19">19:00</option>
            <option value="20">20:00</option>
        </select>
    </div>
    <div>
        <label for="end">Horaire de fin : </label>
        <select name="end" id="end" size="1">
            <option value="9">9:00</option>
            <option value="10">10:00</option>
            <option value="11">11:00</option>
            <option value="12">12:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15">15:00</option>
            <option value="16">16:00</option>
            <option value="17">17:00</option>
            <option value="18">18:00</option>
            <option value="19">19:00</option>
            <option value="20">20:00</option>
            <option value="20">21:00</option>
        </select>
    </div>
    <div>
        <input type="reset" value="Effacer"  />
        <input type="submit" value="Réserver" name="booked"/>
    </div>
</form>
