$(function () {



  function setTab (id) {
    const tabToggle = $(`[href="${id}"]`)
    if (tabToggle) {
      tabToggle.siblings().removeClass('active')
      tabToggle.addClass('active')
      const tabPanel = $(id)
      tabPanel.siblings().removeClass('show active')
      tabPanel.addClass('show active')
    }
  }

  let hash = window.location.hash;
  window.setInterval(() => {
    const oldHash = hash
    hash = window.location.hash
    if (window.location.hash === oldHash)
      return

    let id

    if (!window.location.hash) {
      const element = $(`[href="${oldHash}"]`)
      if (!element)
        return
      id = element.siblings().attr('href')
    } else {
      id = window.location.hash
    }
    setTab(id)
  }, 100)

  if (hash)
    setTab(hash)

  if (hash) {
    const tabToggle = $(`[href="${location.hash}"]`)
    if (tabToggle) {
      tabToggle.siblings().removeClass('active')
      tabToggle.addClass('active')
      const tabPanel = $(location.hash)
      tabPanel.siblings().removeClass('show active')
      tabPanel.addClass('show active')
    }
  }

  $('[data-toggle="tooltip"]').tooltip()

  $('[data-toggle="tab"]').on('click', function (e) {
    e.preventDefault()
    location.hash = $(this).attr('href')
  })
})
