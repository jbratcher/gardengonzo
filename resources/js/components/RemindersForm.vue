<template>

    <section>

        <p>
            <i class="fas fa-plus-circle" v-on:click="isOpen = !isOpen"></i>
            Add a reminder
        </p>

        <form v-show="isOpen" method="POST" action="/reminders" class="reminder-create-form">
            <input type="hidden" name="_token" :value="csrf" />

            <section class="card">

                <section class="card-header">
                    <div class="form-group">
                        <label for="title" hidden>Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="Title" >
                    </div>
                </section>

                <section class="card-body">

                    <div class="form-group">
                        <label for="time" hidden>Time:</label>
                        <input type="datetime-local" class="form-control" id="time" name="time">
                    </div>

                    <div class="form-group">
                        <label for="description" hidden>Description:</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="3">Enter a description here...</textarea>
                    </div>

                </section>

                <section class="card-footer">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </section>

            </section>

        </form>

        <reminders-list
            reminders = "reminders"
        ></reminders-list>

    </section>

</template>

<script>
    export default {
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                isOpen: false,
                reminders: {
                    type: Object,
                    required: true
                }
            }
        },
        prop: [
            'reminders'
        ]
    }
</script>
