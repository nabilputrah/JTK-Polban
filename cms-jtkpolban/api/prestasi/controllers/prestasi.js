const { sanitizeEntity } = require('strapi-utils');

module.exports = {
  /**
   * Retrieve a record.
   *
   * @return {Object}
   */

  async findOne(ctx) {
    const { slug } = ctx.params;

    const entity = await strapi.services.prestasi.findOne({ slug });
    return sanitizeEntity(entity, { model: strapi.models.prestasi });
  },

  async indexPenghargaan(){
    const response = await strapi.query('prestasi').find({'category.name':'Penghargaan', _limit:4, _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.prestasi });
  },

  async indexPKM(){
    const response = await strapi.query('prestasi').find({'category.name':'Program Kreativitas Mahasiswa', _limit:4, _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.prestasi });
  },

  async indexMapres(){
    const response = await strapi.query('prestasi').find({'category.name':'Mahasiswa Berprestasi', _limit:4, _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.prestasi });
  },
};
