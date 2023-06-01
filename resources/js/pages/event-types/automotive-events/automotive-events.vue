<template>
    <div class="container-fluid p-0 d-flex justify-content-center">
        <div class="page-header bg-white page-content p-5">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a class="text-orange" href="#">Event Type</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Automotive Events</li>
                </ol>
            </nav>
            <div class="mt-6 d-flex flex-column align-items-center">
                <h1 class="title mt-0">Automotive Events</h1>
                <h4 class="mt-5">We build custom networks, supported on-site throughout your event, to ensure your staff, attendees, and press can stay connected.</h4>
                <event-row class="mt-6"
                            v-for="event in events"
                            :key="event.id"
                            :event="event">
                        </event-row>
            </div>
            <div class="mt-7">
                <div class="col-md-8 mx-auto text-center">
                    <subscriber></subscriber>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./automotive-events.js"></script>

<style lang="scss">
    @import './automotive-events.scss';
</style>
