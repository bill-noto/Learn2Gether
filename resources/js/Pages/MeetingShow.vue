<template>
    <Head title="Your Meeting"/>

    <div class="min-h-screen bg-red-100 sm:items-center sm:pt-0 font-sans leading-normal tracking-normal text-gray-900">
        <!--    Header    -->
        <header class="sticky top-0 z-50">
            <nav class="bg-gray-100 relative border-b-2 border-gray-300 text-gray-900">
                <div class="container mx-auto flex justify-between items-center">
                    <div class="relative block p-2 lg:p-4 text-xl text-blue-600 font-bold content-center">
                        <Link :href="route('home')">
                            <img src="../../../public/images/learn2gether-logo.png" alt="Learn2Gether"
                                 class="inline w-1/2">
                        </Link>
                    </div>
                    <ul class="2xl:flex xl:flex lg:flex md:flex hidden">
                        <li>
                            <Link :href="route('home')"
                                  class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                Home
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('hosts')"
                                  class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                Hosts
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('forum')"
                                  class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                Forum
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('about')"
                                  class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                About Us
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('contact')"
                                  class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                Contact Us
                            </Link>
                        </li>
                        <li v-if="canLogin">
                            <Link v-if="$page.props.user" :href="route('dashboard')"
                                  class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                Dashboard
                            </Link>

                            <template v-else>
                                <ul class="flex">
                                    <li>
                                        <Link :href="route('login')"
                                              class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                            Log in
                                        </Link>
                                    </li>
                                    <li>
                                        <Link v-if="canRegister" :href="route('register')"
                                              class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                            Register
                                        </Link>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                    <img @click="burgerMenu" src="../../../public/images/menu.png"
                         class="cursor-pointer 2xl:hidden xl:hidden lg:hidden md:hidden inline-block w-5 h-5 mx-3">
                </div>
            </nav>

            <ul ref="bmenu"
                class="bg-gray-100 text-center h-full w-full hidden border-b-2 border-gray-300 text-gray-900">
                <li>
                    <Link class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold" :href="route('home')">
                        Home
                    </Link>
                </li>
                <li>
                    <Link class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold" :href="route('hosts')">
                        Hosts
                    </Link>
                </li>
                <li>
                    <Link class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold" :href="route('forum')">
                        Forum
                    </Link>
                </li>
                <li>
                    <Link class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold" :href="route('about')">
                        About Us
                    </Link>
                </li>
                <li>
                    <Link class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold"
                          :href="route('contact')">Contact Us
                    </Link>
                </li>

                <li v-if="canLogin">
                    <Link v-if="$page.props.user" :href="route('dashboard')"
                          class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                        Dashboard
                    </Link>

                    <template v-else>
                        <ul class="bg-gray-100 text-center h-full w-full border-b-2 border-gray-300 text-gray-900">
                            <li>
                                <Link :href="route('login')"
                                      class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                    Log in
                                </Link>
                            </li>
                            <li>
                                <Link v-if="canRegister" :href="route('register')"
                                      class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                                    Register
                                </Link>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
        </header>
        <!--    End Header    -->

        <!--   Hero     -->
        <section class="relative h-auto shadow-md">
            <div class="container py-12 md:px-0 px-4 mx-auto flex">
                <div class="flex flex-col w-full relative">
                    <h1 class="title-font text-3xl sm:text-5xl lg:text-6xl leading-none tracking-tight mb-8 text-grey-900 text-center">
                        Meeting #{{ this.meeting.id }}</h1>
                    <p class="text-lg sm:text-2xl sm:leading-10 space-y-6 mb-6 text-gray-900 text-center"> Lorem ipsum
                        dolor sit
                        amet consectetur adipisicing elit. Sed recusandae libero possimus culpa quod. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Sed recusandae libero possimus culpa quod </p>
                </div>
            </div>
            <div class="flex flex-col items-center pb-4">
                <Link :href="route('meetings')">
                    <button
                        class="inline-flex text-md sm:text-xl transition-colors duration-200 focus:ring-2 focus:ring-offset-2 focus:ring-current focus:outline-none rounded-md text-white bg-blue-500 hover:bg-blue-700 px-4 py-2">
                        Back to Meetings
                    </button>
                </Link>
            </div>
        </section>
        <!--    End Hero    -->

        <!--    Meetings    -->
        <table
            class="table-fixed mx-auto m-4 border-collapse border border-gray-500 shadow-md w-4/5 text-center 2xl:table xl:table lg:table md:table hidden">
            <thead>
            <tr>
                <th class="border border-gray-600">Meeting #</th>
                <th class="border border-gray-600">Host</th>
                <th class="border border-gray-600">Patron</th>
                <th class="border border-gray-600">Date & Time</th>
                <th class="border border-gray-600">Join | Edit | Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-gray-700">{{ this.meeting.id }}</td>
                <td class="border border-gray-700">{{ this.meeting.host.name }}</td>
                <td class="border border-gray-700">{{ this.meeting.patron.name }}</td>
                <td class="border border-gray-700">{{ this.format(this.meeting.date_time_of_meeting) }}</td>
                <td class="border border-gray-700">
                    <button class="bg-green-600 m-1 text-white p-1 rounded-md underline"
                            @click="join_meeting(this.meeting.id)">JOIN
                    </button>
                    <button class="bg-blue-600 m-1 text-white p-1 rounded-md underline"
                            @click="edit_meeting(this.meeting.id)">EDIT
                    </button>
                    <button class="bg-red-600 m-1 text-white p-1 rounded-md underline"
                            @click="delete_meeting(this.meeting.id)">DELETE
                    </button>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="2xl:hidden xl:hidden lg:hidden md:hidden block mx-auto w-4/5">
            <div class="p-2 m-4 text-center flex flex-col justify-center shadow-md">
                <h1 class="my-1 font-bold text-lg">Meeting #:</h1>
                <p>{{ this.meeting.id }}</p>
                <h1 class="my-1 font-bold text-lg">Host Name:</h1>
                <p>{{ this.meeting.host.name }}</p>
                <h1 class="my-1 font-bold text-lg">Patron Name:</h1>
                <p>{{ this.meeting.patron.name }}</p>
                <h1 class="my-1 font-bold text-lg">Date & Time:</h1>
                <p>{{ this.format(this.meeting.date_time_of_meeting) }}</p>
                <h1 class="my-1 font-bold text-lg">Actions:</h1>
                <div class="flex flex-col items-center justify-center">
                    <button class="bg-green-600 m-1 text-white p-1 rounded-md underline w-1/3"
                            @click="join_meeting(this.meeting.id)">JOIN
                    </button>
                    <button class="bg-blue-600 m-1 text-white p-1 rounded-md underline w-1/3"
                            @click="edit_meeting(this.meeting.id)">EDIT
                    </button>
                    <button class="bg-red-600 m-1 text-white p-1 rounded-md underline w-1/3"
                            @click="delete_meeting(this.meeting.id)">DELETE
                    </button>
                </div>
            </div>
        </div>
        <!--   End Meetings     -->

        <!--    Footer    -->
        <footer
            class="px-4 py-4 h-auto w3-full flex flex-wrap justify-center items-center bg-gray-200 border-gray-300 border-t-2">
            <div class="flex flex-wrap flex-col items-center">
                <div class="flex flex-wrap">
                    <img class="h-6 w-6 mx-1 rounded-full bg-blue-200"
                         alt="Facebook Logo" src="../../../public/images/facebook.jpeg">
                    <img
                        class="h-6 w-6 mx-1 rounded-full bg-blue-200" alt="Instagram Logo"
                        src="../../../public/images/instagram.png">
                    <img class="h-6 w-6 mx-1 rounded-full bg-blue-200"
                         alt="Twitter Logo"
                         src="../../../public/images/twitter.png">
                </div>
                <img src="../../../public/images/learn2gether-logo.png" alt="Learn2Gether" class="inline w-1/2">
                <span class="text-xs text-gray-500">© {{ this.year }}. All rights reserved</span>
            </div>
        </footer>
        <!--    End Footer    -->
    </div>
</template>

<script>
import {defineComponent} from 'vue';
import {Head, Link} from '@inertiajs/inertia-vue3';
import moment from 'moment';

export default defineComponent({
    components: {
        Head,
        Link,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        meeting: Object,
    },
    data() {
        var date = new Date();
        return {
            year: date.getFullYear(),
        }
    },
    methods: {
        burgerMenu() {
            var content = this.$refs.bmenu;
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        },
        format(param) {
            return moment(String(param)).format("DD/MM/YYYY LT")
        },
        delete_meeting(id) {
            if (confirm('Are you sure you want to delete this meeting?')) {
                this.$inertia.delete(`/meetings/${id}`);
            }
        },
        edit_meeting(id) {
            this.$inertia.get(`/meetings/${id}/edit`);
        },
        join_meeting(id) {
            this.$inertia.get(`/meeting/${id}`);
        }
    }
})
</script>
