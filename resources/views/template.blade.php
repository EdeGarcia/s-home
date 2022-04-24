<!DOCTYPE html>
<html lang="en">

@include('components.head')


<body>
    @include('components.header')

    @include('components.sections.hero_section')
        
    <main id="main">
        @include('components.sections.about_section')
        @include('components.sections.counts_section')
        @include('components.sections.clients_section')
        @include('components.sections.services_section')
        @include('components.sections.why_us_section')
        @include('components.sections.portfolio_section')
        @include('components.sections.team_section')
        @include('components.sections.pricing_section')
        @include('components.sections.faq_section')
        @include('components.sections.contact_section')
    </main>

    @include('components.footer')

    @include('components.sections.script_section')
</body>

</html>
