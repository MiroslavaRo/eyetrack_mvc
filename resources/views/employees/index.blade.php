<x-layout>
    <div class="row flex  align-items-center" style="margin-top:100px">
        <div class="col-10">
            <h2 class="">Служители</h2>
        </div>
        <div class="col-2 ">
            <a href="{{ route('employees.create') }}" class="btn bg-green text-white w-100">Добави</a>
        </div>
    </div>
    <div class=" my-4 border-bottom" style="width:98%">
    </div>

    <div class="row mb-5">
        @foreach ($employees as $employee)
            <script>
                function fn(e, id) {
                    e.preventDefault();
                    Swal.fire({
                        text: "Сигурни ли сте, че искате да изтриете служител?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Изтрий",
                        confirmButtonColor: '#dc3545',
                        cancelButtonText: 'Отмяна'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById(`delete-form-${id}`).submit();

                        }
                    });
                }
            </script>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-3 mb-3">
                <div class="card pt-2">
                    <img src="{{ $employee['pfp'] }}"
                        class="card-img-top profile-pic  rounded-circle mx-auto object-fit-cover" alt="employee Image">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold text-capitalize  mb-0">{{ $employee['name'] }}</p>
                        <p class=" card-text text-capitalize mb-0">({{ $employee['position'] }})</p>
                        <small class="card-text text-muted ">{{ $employee['email'] }}</small>
                        <div class="row gap-2 align-items-center justify-items-center mt-3">
                            <a href="{{ route('employees.edit', $employee['id']) }}"
                                class="col col-lg-6 btn border-0 bg-yellow">Редактиране</a>
                            <form class="col col-lg-5 px-lg-auto px-0" id="delete-form-{{$employee['id']}}"
                                action="{{ route('employees.destroy', $employee['id'])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger  w-100"
                                    onclick="return fn(event,{{ $employee['id']}});">Изтриване</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>