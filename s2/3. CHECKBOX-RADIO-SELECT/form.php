<form method="post" action="./process.php">
    <div class="mb-3">
        <select name="province" class="form-control">
            <option selected disabled>Choose province</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hải Phòng">Hải Phòng</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="checkbox" name="skills[]" class="form-control-check" id="html" value="HTML">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" name="skills[]" class="form-control-check" id="css" value="CSS">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" name="skills[]" class="form-control-check" id="js" value="JavaScript">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" name="skills[]" class="form-control-check" id="php" value="PHP">
        <label for="php" class="form-label">PHP</label>
    </div>
    <div class="mb-3">
        <input type="radio" name="gender" class="form-control-check" id="Female" value="Female">
        <label for="Female" class="form-label">Female</label>

        <input type="radio" name="gender" class="form-control-check" id="Male" value="Male">
        <label for="Male" class="form-label">Male</label>
    </div>
   
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
