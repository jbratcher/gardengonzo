<template>
    <div>

        <h2>Reminders List</h2>

        <ul>
            <li v-for="reminder in reminders">
                {{ reminder.title }}
            </li>
        </ul>

    </div>

</template>

<script>
    export default {
        props: [
            'reminders'
        ]
    }
</script>
