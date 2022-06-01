const { sanitizeEntity } = require('strapi-utils');

module.exports = {
  /**
   * Retrieve a record.
   *
   * @return {Object}
   */

  async indexD316(){
    const response = await strapi.query('matakuliah').find({'kurikulum.kode':'D3-2016', _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.prestasi });
  },

  async indexD416(){
    const response = await strapi.query('matakuliah').find({'kurikulum.kode':'D4-2016', _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.prestasi });
  },

};
