<template>
    <div class="p-4 d-flex flex-column h-100" style="overflow: auto;">
        <div class="card bg-light-subtle shadow-none border">
            <div class="card-header bg-light-subtle">
                <div class="d-flex mb-n3">
                    <div class="flex-shrink-0 me-3">
                        <div style="height: 2.5rem; width: 2.5rem;">
                            <span class="avatar-title bg-primary-subtle rounded p-2 mt-n1">
                                <i class="bx bxs-calendar-week text-primary fs-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fs-14"><span class="text-body">{{latest.month}}</span></h5>
                        <p class="text-muted text-truncate-two-lines fs-12">Financial benefits for this month..
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body bg-white">
                <div class="d-flex flex-column">
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Scholars</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i> {{latest.received}} / {{latest.ongoing}}</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progess mb-1">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                            aria-valuemax="100" :style="`width: ${(latest.scholars.length / latest.ongoing) * 100}%;`"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <b-link v-for="(list, index) of latest.scholars" :key="index" class="avatar-group-item" v-b-tooltip.hover :title="list.name">
                                <div class="avatar-xxs" v-if="list.avatar != 'avatar.jpg'">
                                    <img :src="currentUrl+'/images/avatars/avatar.jpg'" alt="" class="rounded-circle img-fluid" />
                                </div>
                                <div class="avatar-xxs" v-else>
                                    <div class="avatar-title fs-16 rounded-circle bg-primary border-dashed border text-white">
                                        {{ list.name[0] }}
                                    </div>
                                </div>
                            </b-link>
                            <a class="avatar-group-item" target="_self" style="cursor: default;">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-light text-primary">+</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted fs-12"><i class="ri-calendar-event-fill me-1 align-bottom"></i> {{formattedDate}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['latest'],
    data(){
        return {
            currentUrl: window.location.origin,
            formattedDate: new Date().toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
            }),
        }
    },
}
</script>