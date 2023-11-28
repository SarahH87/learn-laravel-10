@extends('layouts.app')

@section('title', 'Employee List')

@section('content')

    <div id="app" class="">

        <section v-show="inProgressAssignments.length">
            <h1 class="text-2xl font-bold">Vue Lists, Conditionals and Computed Properties</h1>
            <h2 class="text-xl font-bold mt-8 mb-2">In Progress</h2>

            <ul>
                <li v-for="assignment in inProgressAssignments"
                    :key="assignment.id">
                    <label>
                        @{{ assignment.name }}

                        <input type="checkbox" v-model="assignment.complete">
                    </label>
                </li>
            </ul>
        </section>

        <section v-show="completedAssignments.length" class="mt-8">
            <h2 class="text-xl font-bold">Completed</h2>

            <ul>
                <li v-for="assignment in completedAssignments"
                    :key="assignment.id">
                    <label>
                        @{{ assignment.name }}

                        <input type="checkbox" v-model="assignment.complete">
                    </label>
                </li>
            </ul>
        </section>
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
