jQuery(document).ready(function($) {
  var $matcher = $('#github-matcher');

  var get__github = function() {
    
  };

  var github__matcher = {
    init: function() {
      this.container = $('#github-matcher');
      this.prev = null;
      this.current = 'https://api.github.com/users?per_page=12';
      this.bind();
      this.getMatch();
    },
    bind: function() {
      var self = this;

      $('.js-gitdata-nav')
        .click(function() {
          self.navigationMatch($(this).data('href')); 
      });
    },
    getMatch: function() {
      var self = this;

      self.getData(self.current, function(data, textStatus, request) {
        var link = request.getResponseHeader('Link').split(',');

        self.render('githubData', data, link);
        self.bind();
      });
    },
    navigationMatch: function(url) {
      var self = this;

      self.getData(url, function(data, textStatus, request) {
        var link = request.getResponseHeader('Link').split(',');

        self.render('githubData', data, link);
        self.bind();
        self.scrollTop();
      });
    },
    scrollTop: function() {
      $('html, body').animate({
        scrollTop: 0
      }, 'slow');
    },
    getData: function(url, callback) {
      $.get(url, callback);
    },
    setPrev: function(prev) {
      this.prev = prev;
    },
    getPrev: function() {
      return this.prev;
    },
    setCurrent: function(current) {
      this.current = current;
    },
    getCurrent: function() {
      return this.current;
    },
    render: function(cmd, data, link) {
      var self = this;

      var commands = {
          githubData: function(data, link) {
            var linkNext = link[0].split('{')[1] ? null : link[0].split(';')[0].replace(/[<>]/g, "");
            var linkPrev = self.getPrev() ? self.getPrev() : null;

            // Set URL Current and Previous
            self.setPrev(self.getCurrent())
            self.setCurrent(linkNext);

            link = {
              next: linkNext,
              prev: linkPrev
            }

            $(self.container).html(self.view('githubData', data, link));
          }
      }

      commands[cmd](data, link);
    },
    view: function(cmd, data, link) {
      var self = this;

      var commands = {
          githubData: function(data, link) {
            var viewGithubData = '<div class="github-grid"><ul>';

            $.each(data, function() {
              viewGithubData += '' +
              '<a target="_blank" href="'+ this.html_url +'"><li>' +
                '<img src="'+ this.avatar_url +'" alt="" />' +
                '<h3>'+ this.login +'</h3>' +
              '</li></a>';
            });

            viewGithubData += '</ul></div>';

            // Generate Pagination
            viewGithubData += '<div class="pagination"><div class="nav-group">';
              if(link.prev)
                viewGithubData += '<div class="prev js-gitdata-nav" data-href="' +link.prev+ '"> Prev </div>';

              if (link.next)
                viewGithubData += '<div class="next js-gitdata-nav" data-href="' +link.next+ '"> Next </div>';
              
            viewGithubData += '</div></div>';

            return viewGithubData;
          }
      }

      return commands[cmd](data, link);
    }
  }

  if ( $matcher.length != 0 ) {
    github__matcher.init();
  }

});