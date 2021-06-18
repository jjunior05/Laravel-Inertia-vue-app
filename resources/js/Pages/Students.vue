<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Students
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div
                                class="
                                    py-2
                                    align-middle
                                    inline-block
                                    min-w-full
                                    sm:px-6
                                    lg:px-8
                                "
                            >
                                <div
                                    class="
                                        shadow
                                        overflow-hidden
                                        border-b border-gray-200
                                        sm:rounded-lg
                                    "
                                >
                                    <table
                                        class="
                                            min-w-full
                                            divide-y divide-gray-200
                                        "
                                    >
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Name
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Email
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Course
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Date Enrollment
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="relative px-6 py-3"
                                                >
                                                    <span class="sr-only"
                                                        >Edit</span
                                                    >
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="
                                                bg-white
                                                divide-y divide-gray-200
                                            "
                                        >
                                            <tr>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                    "
                                                >
                                                    <div
                                                        class="
                                                            text-sm
                                                            text-gray-900
                                                        "
                                                    >
                                                        Regional Paradigm
                                                        Technician
                                                    </div>
                                                    <div
                                                        class="
                                                            text-sm
                                                            text-gray-500
                                                        "
                                                    >
                                                        Optimization
                                                    </div>
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                    "
                                                >
                                                    teste@teste.br
                                                    <!-- <span
                                                        class="
                                                            px-2
                                                            inline-flex
                                                            text-xs
                                                            leading-5
                                                            font-semibold
                                                            rounded-full
                                                            bg-green-100
                                                            text-green-800
                                                        "
                                                    >
                                                        Active
                                                    </span> -->
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                        text-sm text-gray-500
                                                    "
                                                >
                                                    teste
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                        text-sm text-gray-500
                                                    "
                                                >
                                                    01/01/2021
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                        text-right text-sm
                                                        font-medium
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            text-indigo-600
                                                            hover:text-indigo-900
                                                        "
                                                        >Edit</a
                                                    >
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                        text-right text-sm
                                                        font-medium
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            text-indigo-600
                                                            hover:text-indigo-900
                                                        "
                                                        >Delete</a
                                                    >
                                                </td>
                                            </tr>

                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <template #footer>
            <button
                class="btn btn-secondary btn-lg"
                data-toggle="modal"
                data-target="addStudent"
            >
                Launch
            </button>

            <!-- Modal Add a new Student -->
            <div
                class="modal fade"
                id="addStudent"
                tabindex="-1"
                aria-labelledby="modalTitleId"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add a new Student</h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form
                                    @submit.prevent="addStudent"
                                    method="POST"
                                >
                                    <div class="form-group">
                                        <label for="full_name">Full Name</label>
                                        <input
                                            type="text"
                                            v-model="student.full_name"
                                            class="form-control"
                                            name="course_name"
                                            id="course_name"
                                            placeholder="Enter the course name"
                                        />
                                        <small
                                            id="helIp"
                                            class="fomr-text text-muted"
                                            >Enter your Full name</small
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label for="Age">Age</label>
                                        <input
                                            type="text"
                                            v-model="student.age"
                                            class="form-control"
                                            name="price"
                                            id="price"
                                            placeholder="Enter the price"
                                        />
                                        <small
                                            id="helIp"
                                            class="fomr-text text-muted"
                                            >Enter your age</small
                                        >
                                    </div>
                                    <div class="form-">
                                        <label for="course">Active</label>
                                        <select
                                            name="course"
                                            v-model="course.course"
                                            id="course"
                                        >
                                            <option selected>
                                                Choice your course
                                            </option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="form-">
                                        <label for="course">Active</label>
                                        <select
                                            name="course"
                                            v-model="course.course_is_ative"
                                            id="course"
                                        >
                                            <option selected value="yes">
                                                Yes
                                            </option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Salvar
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                class="btn btn-secondary"
                                type="button"
                                data-dismiss="close"
                            >
                                Close
                            </button>
                            <button class="btn btn-primary" type="submit">
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <button
                class="btn btn-secondary btn-lg"
                data-toggle="modal"
                data-target="addCourse"
            >
                Add Course
            </button>

            <!-- Modal Add a new Student -->
            <div
                class="modal fade"
                id="addCourse"
                tabindex="-1"
                aria-labelledby="modalTitleId"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add a new Course</h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form @submit.prevent="addCourse" method="POST">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input
                                            type="text"
                                            v-model="course.name"
                                            class="form-control"
                                            name="course_name"
                                            id="course_name"
                                            placeholder="Enter course Name"
                                        />
                                        <small id="helIp"
                                            >Enter course name</small
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label for="course_price">Email</label>
                                        <input
                                            type="text"
                                            v-model="course.price"
                                            class="form-control"
                                            name="price"
                                            id="price"
                                            placeholder="Enter Course price"
                                        />
                                        <small id="helIp"
                                            >Enter course price</small
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="date_enrollment"
                                            >Date Enrollment</label
                                        >
                                        <input
                                            type="text"
                                            v-model="course.date_enrollment"
                                            class="form-control"
                                            name="date_enrollment"
                                            id="date_enrollment"
                                            placeholder="Enter Date Enrollment"
                                        />
                                        <small id="helIp"
                                            >Enter Date Enrollment</small
                                        >
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                class="btn btn-secondary"
                                type="button"
                                data-dismiss="close"
                            >
                                Close
                            </button>
                            <button class="btn btn-primary" type="submit">
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
    components: {
        AppLayout,
    },

    data() {
        return {
            students: [],
            student: {
                full_name: "",
                age: "",
                email: "",
                course: "",
            },
            course: [],
            course: {
                name: "",
                price: "",
                date_enrollment: "",
                is_ative: "",
            },
        };
    },
    methods: {
        async addStudent() {
            const resp = await axios.post("/api/students", this.students);
            if (resp.status == 200) {
                Toast.fire({
                    icon: 'success',
                    title: resp.data,
                });
            }
        },
        getStudents() {},
        addCourse() {},
        getCourses() {},
    },
};
</script>
