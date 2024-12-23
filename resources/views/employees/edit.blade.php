<x-layout>
    <div class="container-fluid" style="margin-top:150px">
        <div class="row mx-0 mx-md-5 contacts-section">
            <h2 class="col-12 mb-3">Редактирай</h2>
            <form id="contact-form" class="col-12 row" action="{{ route('employees.update', $employee['id']) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Имена</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $employee['name'] }}"
                        required>
                    @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label for="position" class="form-label">Позиция</label>
                    <input type="text" class="form-control" id="position" name="position"
                        value="{{ $employee['position'] }}" required>
                    @error('position')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $employee['email'] }}"
                        required>
                    @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label for="pfp" class="form-label">Снимка</label>
                    <input type="text" class="form-control" id="pfp" name="pfp" value="{{ $employee['pfp'] }}" required>
                    @error('pfp')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn bg-green text-white mt-3">Редактирай</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>