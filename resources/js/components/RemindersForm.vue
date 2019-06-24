<template>


    <section class="reminder-create-section">

        <p class="reminder-create-tagline">
            <i class="fas fa-plus-circle" v-on:click="isOpen = !isOpen"></i>
            Add a reminder
        </p>

        <form v-show="isOpen" @submit.prevent="submit" method="POST" action="/reminders" class="reminder-create-form">
            <input type="hidden" name="_token" :value="csrf" />

            <section class="card">

                <section class="card-header">
                    <div class="form-group">
                        <label for="title" hidden>Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="Title" v-model="newReminder.title">
                    </div>
                </section>

                <section class="card-body">

                    <div class="form-group">
                        <label for="time" hidden>Time:</label>
                        <input type="datetime-local" class="form-control" id="time" name="time" v-model="newReminder.time">
                    </div>

                    <div class="form-group">
                        <label for="description" hidden>Description:</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="3" v-model="newReminder.description">Enter a description here...</textarea>
                    </div>

                </section>

                <section class="card-footer">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </section>

            </section>

        </form>

    </section>

</template>

<script>
    export default {
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                isOpen: false,
                newReminder: {},
                errors: {},
            }
        },
        props: {
            reminders: Array
        },
        methods: {
            submit() {
                this.errors = {};
                axios.post('/reminders', this.newReminder).then(response => {
                    console.log(response);
                    console.log(response.config.data);
                }).catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            },
        },
    }
</script>
