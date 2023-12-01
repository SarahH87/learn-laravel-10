@extends('layouts.app')

@section('title', 'Employee List')

@section('content')

    <div id="app" class="">


    </div>


    <script>
        let app = {
            computed: {
                completedAssignments() {
                    return this.assignments.filter(assignment => assignment.complete);
                },
                inProgressAssignments() {
                    return this.assignments.filter(assignment => !assignment.complete);
                },
            },

            data() {
                return {
                    assignments: [
                        { name: 'Finish shopping', complete: false, id: 1},
                        { name: 'Learn Vue', complete: false, id: 2},
                        { name: 'Laravel basics recap', complete: false, id: 3},
                        { name: 'Read Laravel documentation', complete: false, id:4},
                        { name: 'Learn Docker', complete: false, id:5},
                        { name: 'Build API', complete: false, id:6},
                    ]
                }
            }
        };

        Vue.createApp(app).mount('#app');
    </script>
@endsection
