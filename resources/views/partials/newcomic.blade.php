<div class="container">
    <div class="row p-5 justify-content-center">
        <div class="col-12 col-md-5">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <div class="form-group mb-3">
                    <label for="title" class="form-label mb-2">TITLE:</label>
                    <input type="text" name="title" id="title" placeholder="The Killing Joke"
                        class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label mb-2">DESCRIPTION:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                        placeholder="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur tempore illo molestiae repudiandae quae? Cum pariatur, quam necessitatibus, aliquam, soluta sed doloribus maiores mollitia eligendi quibusdam voluptatibus incidunt nisi fuga."
                        required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="thumb" class="form-label mb-2">IMAGE URL:</label>
                    <input type="text" name="thumb" id="thumb" class="form-control"
                        placeholder="Example: https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY">
                </div>

                <div class="form-group mb-3">
                    <label for="price" class="form-label mb-2">PRICE:</label>
                    <input type="text" name="price" id="price" placeholder="$19.99" value="$"
                        class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="series" class="form-label mb-2">SERIES:</label>
                    <input type="text" name="series" id="series" placeholder="Action / Drama / Fantasy / Horror"
                        class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="sale_date" class="form-label mb-2">SALE DATE:</label>
                    <input type="text" name="sale_date" id="sale_date" placeholder="2024-02-17" class="form-control"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label for="type" class="label-control mb-2">TYPE:</label>
                    <input type="text" name="type" id="type" class="form-control" placeholder="Comic Book"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label for="artists" class="label-control mb-2">ARTISTS:</label>
                    <input artists="text" name="artists" id="type" class="form-control"
                        placeholder="Jim Lee, Curt Swan, Dan Jurgens" required>
                </div>

                <div class="form-group mb-5">
                    <label for="writers" class="label-control mb-2">WRITERS:</label>
                    <input writers="text" name="writers" id="type" class="form-control"
                        placeholder="Richard Donner, Paul Levitz, Tom King" required>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-primary" type="submit">ADD</button>
                </div>
            </form>
        </div>
    </div>
</div>
