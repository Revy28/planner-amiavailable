<div>
    <form>
        <div class="d-flex justify-content-end pt-4">
            <button class="btn btn-success text-white" wire:click.prevent="addShift">
                <i class="fas fa-plus"></i> Dienst Toevoegen
            </button>
        </div>
        <div class="p-2"></div>
        @foreach($shifts as $index => $shifts)
            <div class="row">
                <div class="form-group col-3">
                    <label for="werknemer">Werknemer</label>

                    <select class="form-select" aria-label="Default select example">
                        @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{$employee->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="startTijd">Start tijd</label>
                    <input type="time" class="form-control" value="00:00">
                </div>
                <div class="form-group col-3">
                    <label for="eindTijd">Eind tijd</label>
                    <input type="time" class="form-control" value="00:00">
                </div>
                <div class="form-group col-3">
                    <a href="">Verwijder Dienst</a>
                </div>
            </div>
            <div class="p-2"></div>
        @endforeach
    </form>
</div>
