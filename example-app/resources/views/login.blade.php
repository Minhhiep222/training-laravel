<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form>
        <fieldset disabled>
        <legend>Disabled fieldset example</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Disabled input</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Disabled select menu</label>
            <select id="disabledSelect" class="form-select">
            <option>Disabled select</option>
            </select>
        </div>
        <div class="mb-3">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
            <label class="form-check-label" for="disabledFieldsetCheck">
                Can't check this
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
