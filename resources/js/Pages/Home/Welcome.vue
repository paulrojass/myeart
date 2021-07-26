<template>
<div>
    <CoverSection />
    <WorksArtSection 
      :docs="artworks" 
    />
    <BIOArtistSection  
      :docs="artists"
    />
    <GalleryReferencesSection 
      :docs="galleries"
    />
    <InfoConvertedSection />
    <ListBenefitsSection />
    <NewsletterSection />
</div>
</template>

<script>

//Layout
import LayoutDefault from '../../Layouts/Default/LayoutDefault'

// Section
import CoverSection from './Sections/CoverSection'
import WorksArtSection from './Sections/WorksArtSection'
import BIOArtistSection from './Sections/BIOArtistSection'
import GalleryReferencesSection from './Sections/GalleryReferencesSection'
import InfoConvertedSection from './Sections/InfoConvertedSection'
import ListBenefitsSection from './Sections/ListBenefitsSection'
import NewsletterSection from './Sections/NewsletterSection'

export default {
  props: [
    'artists',
    'artworks',
    'galleries'
  ],
  layout: LayoutDefault,

  components: {
    CoverSection,
    WorksArtSection,
    BIOArtistSection,
    GalleryReferencesSection,
    InfoConvertedSection,
    ListBenefitsSection,
    NewsletterSection
  },

  created(){
    console.log('this', this.$page.props)
  },

  data() {
    return {
    }
  },

  methods: {
  }
}
</script>
