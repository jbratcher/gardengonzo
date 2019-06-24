<template>

    <ul>

        <li v-for="reminder in reminders">
            <section class="card">
                <section :class=" reminder.completed ? 'reminder-completed-header card-header' : 'reminder-header card-header' " >
                    <h5 class="card-title">
                        <a :href="`reminders/` + reminder.id">
                            {{ reminder.title }}
                        </a>
                    </h5>
                    <span class="card-text">
                        <form method="POST" :action="`reminders/` + reminder.id + `/completed`">
                            <input type="hidden" name="_method" value="PATCH">
                            <input type="hidden" name="_token" :value="csrf" />
                            <label for="completed">Completed</label>
                            <input type="checkbox" id="completed" name="completed" onChange="this.form.submit()" :checked="reminder.completed ? 'checked' : '' ">
                        </form>
                    </span>
                </section>

                <section class="card-body">
                    <p class="card-text">{{ reminder.time }}</p>
                    <p class="card-text">{{ reminder.description }}</p>
                </section>

            </section>
        </li>
    </ul>


</template>

<script>
    export default {
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        props: {
            reminders: Array
        },
    }
</script>
