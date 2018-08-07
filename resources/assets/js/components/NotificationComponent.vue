<template>

    <li class="dropdown at-drop">
        
        <a onclick="window.location = '/mostrar'" class="dropdown-toggle dropdown-at " data-toggle="dropdown">

            <i class="fa fa-bell" aria-hidden="true">
                <span class="number"> {{ notifications }}</span>
            </i>
        </a>
    </li>
</template>

<script>
    export default {
        props: ['notifications']
    }
</script>
